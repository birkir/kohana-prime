# Prime for heroku

1. Fork or clone this repository.
2. Add cleardb plug-in for your heroku app.
3. Edit ``APPPATH/config/database.php``
4. Import mysql schema to database.
5. Edit ``APPPATH/config/prime.php``
6. Edit ``APPPATH/config/auth.php``

Then convert your heroku app to hhvm:

     heroku config:set BUILDPACK_URL=https://github.com/hhvm/heroku-buildpack-hhvm
     touch heroku-hhvm
     git add heroku-hhvm
     git commit -m "Converting heroku app to hhvm."
     git push

Thanks
