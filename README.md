This program is test task for MetaSystem company.

To use this program the following programs must be installed on your PC.

 - PHP7.1 (PHP7.1-cli)
 - composer 1.10

This application uses command line interface (CLI). Before using this
application, please, do the following.

1. Clone the repository via "git clone" or download archive and unzip it.
2. In the directory of project (where "composer.json" file is located)
   do the 

       composer install

3. From the directory of project run php interpreter and transfer
   path to the "meparser.php" file to it (it is also in the project`s
   root). Transfer to the meparser.php file the expression you should check IN QUOTES. Like the following.

       php meparser.php "{}"

4. The result of this command execution is

       Right

4.1. If you input something like

    php meparser.php "{(}"

the result should be

    Wrong

5. Enjoy.