pipeline {
    agent any

    stages {
        stage('Get Ready') {
            steps {
                // Print the name of the current stage
                sh 'echo "Stage: Get Ready"'
                // Include any preparation commands if needed
            }
        }

        stage('Build') {
            steps {
                // Print the name of the current stage
                sh 'echo "Stage: Build"'
                // Add build commands if needed (example: compile code)
            }
        }

        stage('Test') {
            steps {
                // Print the name of the current stage
                sh 'echo "Stage: Test"'
                // Add test commands here (e.g., run unit tests)
            }
        }

        stage('Push') {
            steps {
                // Print the name of the current stage
                sh 'echo "Stage: Push"'
                // Add push commands here (e.g., push to a repository)
            }
        }

        stage('Clean') {
            steps {
                // Print the name of the current stage
                sh 'echo "Stage: Clean"'
                // Add clean-up commands here (e.g., remove temporary files)
            }
        }
    }
}
