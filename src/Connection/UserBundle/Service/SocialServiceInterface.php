<?php

namespace Connection\UserBundle\Service;


interface SocialServiceInterface {

    function getLoginButton();

    function getProfile();

    function getName();

    function normalize($profile);

    function getErrors();
}