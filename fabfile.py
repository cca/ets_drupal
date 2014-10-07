from fabric.api import settings, abort, env, run, sudo
from fabric.context_managers import cd
from fabric.contrib.files import exists
 
def dev():
	env.hosts = ['209.40.90.63']
	env.user = 'aspafford'
	env['ets_dir'] = '/opt/drupal/ets14/'
 
def push():
	with cd(env['ets_dir']):
	  run("git pull")