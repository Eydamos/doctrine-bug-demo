# Introduction
This repository was created to showcase a bug in doctrine/doctrine-bundle.
# Installation
* Clone the repository to your local machine
  * You need to have PHP8 installed
* Run `composer install`
* Run `bin/console cache:clear --env=prod`

# Expected behaviour

    // Clearing the cache for the prod environment with debug true
                                                                                                                        
    [OK] Cache for the "prod" environment (debug=true) was successfully cleared.  

# Actual behaviour

    In DoctrineMetadataCacheWarmer.php line 49:

      DoctrineMetadataCacheWarmer must load metadata first, check priority of your warmers.

# Cause
TableSubscriber is assigned to connection A. In it's constructor it is requiring a repository which uses an entity from connection Z.  
When the cache is warmed for connection A the subscriber is initialized and with it the repository which will load the entity manager of an
entity from connection Z.  
Doctrine will generate metadata for this entity. When connection Z is then warmed metadata for this one entity is already present which
throws the exception
