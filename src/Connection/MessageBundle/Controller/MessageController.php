<?php

namespace Connection\MessageBundle\Controller;

use Connection\UserBundle\Entity\User;
use FOS\MessageBundle\Provider\ProviderInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\DependencyInjection\ContainerAware;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use FOS\MessageBundle\Controller\MessageController as BaseMessageController;


/**
 * @Route("/message")
 */
class MessageController extends BaseMessageController
{
    /**
     * @Route("/", name="message_inbox")
     * @Template()
     */
    public function inboxAction()
    {
        $threads = $this->getProvider()->getInboxThreads();

        return $this->container->get('templating')->renderResponse('ConnectionMessageBundle:Message:inbox.html.twig', array(
            'threads' => $threads
        ));
    }

    /**
     * @Route("/sent", name="message_sent")
     * @Template()
     */
    public function sentAction()
    {
        $threads = $this->getProvider()->getSentThreads();

        return $this->container->get('templating')->renderResponse('ConnectionMessageBundle:Message:sent.html.twig', array(
            'threads' => $threads
        ));
    }

    /**
     * @Route("/deleted", name="message_deleted")
     * @Template()
     */
    public function deletedAction()
    {
        $threads = $this->getProvider()->getDeletedThreads();

        return $this->container->get('templating')->renderResponse('ConnectionMessageBundle:Message:deleted.html.twig', array(
            'threads' => $threads
        ));
    }

    /**
     * @Route("/{threadId}", name="message_view", requirements={"threadId" = "\d+"})
     * @Template()
     */
    public function threadAction($threadId)
    {
        $thread = $this->getProvider()->getThread($threadId);
        $form = $this->container->get('fos_message.reply_form.factory')->create($thread);
        $formHandler = $this->container->get('fos_message.reply_form.handler');

        if ($message = $formHandler->process($form)) {
            return new RedirectResponse($this->container->get('router')->generate('fos_message_thread_view', array(
                'threadId' => $message->getThread()->getId()
            )));
        }

        return $this->container->get('templating')->renderResponse('ConnectionMessageBundle:Message:thread.html.twig', array(
            'form' => $form->createView(),
            'thread' => $thread
        ));
    }

    /**
     * @Route("/new/{id}", name="message_new", requirements={"id" = "\d+"})
     * @Template()
     * @ParamConverter("User", class="ConnectionUserBundle:User")
     */
    public function newThreadUserAction(User $user)
    {
        $form = $this->container->get('fos_message.new_thread_form.factory')->create();
        $formHandler = $this->container->get('fos_message.new_thread_form.handler');

        $form->get('recipient')->setData($user);

        if ($message = $formHandler->process($form)) {
            return new RedirectResponse($this->container->get('router')->generate('fos_message_thread_view', array(
                'threadId' => $message->getThread()->getId()
            )));
        }

        return $this->container->get('templating')->renderResponse('ConnectionMessageBundle:Message:newThread.html.twig', array(
            'form' => $form->createView(),
            'data' => $form->getData(),
            'user' => $user
        ));
    }

    /**
     * @Route("/ajax/new/{id}", name="ajax_message_new", requirements={"id" = "\d+"})
     * @Template()
     * @ParamConverter("User", class="ConnectionUserBundle:User")
     */
    public function newThreadUserAjaxAction(User $user)
    {
        $form = $this->container->get('fos_message.new_thread_form.factory')->create();
        $formHandler = $this->container->get('fos_message.new_thread_form.handler');

        $form->get('recipient')->setData($user);

        if ($message = $formHandler->process($form)) {
            return new RedirectResponse($this->container->get('router')->generate('fos_message_thread_view', array(
                'threadId' => $message->getThread()->getId()
            )));
        }

        return $this->container->get('templating')->renderResponse('ConnectionMessageBundle:Message:newThreadAjax.html.twig', array(
            'form' => $form->createView(),
            'data' => $form->getData(),
            'user' => $user
        ));
    }

    /**
     * Deletes a thread
     *
     * @param string $threadId the thread id
     *
     * @return RedirectResponse
     */
    public function deleteAction($threadId)
    {
        $thread = $this->getProvider()->getThread($threadId);
        $this->container->get('fos_message.deleter')->markAsDeleted($thread);
        $this->container->get('fos_message.thread_manager')->saveThread($thread);

        return new RedirectResponse($this->container->get('router')->generate('fos_message_inbox'));
    }

    /**
     * Undeletes a thread
     *
     * @param string $threadId
     *
     * @return RedirectResponse
     */
    public function undeleteAction($threadId)
    {
        $thread = $this->getProvider()->getThread($threadId);
        $this->container->get('fos_message.deleter')->markAsUndeleted($thread);
        $this->container->get('fos_message.thread_manager')->saveThread($thread);

        return new RedirectResponse($this->container->get('router')->generate('fos_message_inbox'));
    }

    /**
     * Searches for messages in the inbox and sentbox
     *
     * @return Response
     */
    public function searchAction()
    {
        $query = $this->container->get('fos_message.search_query_factory')->createFromRequest();
        $threads = $this->container->get('fos_message.search_finder')->find($query);

        return $this->container->get('templating')->renderResponse('FOSMessageBundle:Message:search.html.twig', array(
            'query' => $query,
            'threads' => $threads
        ));
    }

    /**
     * Gets the provider service
     *
     * @return ProviderInterface
     */
    protected function getProvider()
    {
        return $this->container->get('fos_message.provider');
    }
}
