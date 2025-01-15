pipeline {
    agent any
    
    stages {
        stage('Checkout') {
            steps {
                git branch: 'main',
                    credentialsId: 'github-creds',
                    url: 'https://github.com/TaraRhoseyn/Laravel-php'
            }
        }
        // ... rest of your stages ...
    }
}