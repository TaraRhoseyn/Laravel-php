pipeline {
    agent any
	
    environment {
		DOCKERHUB_CREDENTIALS=credentials('docker-cred')
	}
    stages {
        stage('Docker Login') {
            steps {
                sh 'echo $DOCKERHUB_CREDENTIALS_PSW | docker login -u $DOCKERHUB_CREDENTIALS_USR --password-stdin'
            }
        }
        stage('Build & push Dockerfile') {
            steps {
                  sh '''
		       
		        docker stop my-running-app || true
		        docker rm my-running-app || true
		        docker rmi tararose96/my-running-app || true
		        docker build -t tararose96/my-running-app .
                        docker compose up -d
		        docker push tararose96/my-running-app
		        '''
            }
        }
	      //sh '''
		      //  docker compose down
	               // docker stop laravel-container || true
		       // docker rm laravel-container || true
		      //  docker rmi bassam2080/laravel-php || true
		     //   
                             
		//        '''
        stage('Clean') {
            steps {
             echo "hi"
	  //  sh  'docker compose down'
            }
        }
    }
}