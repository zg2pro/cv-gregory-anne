consult it online at http://cv.gregory.anne.free.fr


## continuous integration

something to test:

deploy:
  script:
    - apt-get update -qq && apt-get install -y -qq lftp
    - lftp -c "set ftp:ssl-allow no; open -u $USERNAME,$PASSWORD $HOST; mirror -Rnev --ignore-time --parallel=10 --exclude-glob .git* --exclude .git/"
  only:
    - master

