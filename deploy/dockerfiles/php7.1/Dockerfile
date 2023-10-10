FROM runroom/php7.1-cli

#create project`s directory
RUN mkdir -p --mode=775 ~/cli
RUN mkdir -p --mode=775 ~/cli/php

#composer self-update
RUN composer self-update

#move to the directory of project
RUN cd ~/cli/php
