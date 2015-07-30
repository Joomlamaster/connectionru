git pull
app/console doctrine:schema:update --force
rm -rf /app/cache/*
app/console cache:clear --env=prod
app/console assets:install
app/console assets:install --symlink
app/console assetic:dump --env=prod
