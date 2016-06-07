# AWS Deployment Template

This repository is a template for a client deployment to aws.

Copy, customise, possibly build and push an image and deploy to AWS using the web UI or eb-cli.


## Copy
Ensure to clear the .git folder and reinitialise the repository for your purposes.

## Customise
The final deployment repository must include `Dockerrun.aws.json` to configure the deployment. 
This configuration file can specify what image to run, filesystem volumes and more.

You can include a `Dockerfile` that specifies build steps for the client image.
Typically you will add files to a base 2pisoftware/cmfive image.

This example includes 

- a sql file that is run when the instance is deployed
- a cmfive config file to customise the installation for the client
- the nginx default sites-enabled file 

## Build and Push

You may need to prebuild the image file for your application.

Where you have included a `Dockerfile` and you are deploying to a AWS single docker instance, the client image will be built as part of the deployment process. 

Otherwise you will need to build the docker image locally and push it to a registry. Public images can be pushed to docker hub but client images should be stored in the AWS docker registry.

- change directory to the client deployment folder
- `docker build 2pisoftware/client-awsdeployment .`
- docker login, docker push 2pisoftware/client-awsdeployment

There is a sample Dockerrun template file for prebuilt images.

See https://docs.aws.amazon.com/elasticbeanstalk/latest/dg/create_deploy_docker_image.html

## Deployment

Zip the files inside the template folder (but not the folder itself) and `Upload and Deploy` from the elastic beanstalk dashboard.

Alternatively you can use (eb-cli)[https://docs.aws.amazon.com/elasticbeanstalk/latest/dg/eb-cli3.html] to deploy changes.




