#Laravel Blog

##Getting Started

1. Clone this repo into your sites folder

2. Run `ansible-playbook ansible/create-vagrant-site.yml`

3. Create a database w/ ansible commands

4. Update your hosts file

5. Create your own .env.locl.php file

6. Run `composer install`

##Troubleshooting
- if a class name is not founf and you see the file containing it, try running `composer dump-autoload` from yout VM.