class DbConnectionTest extends TestCase {
    public function testDatabaseConnection() {
        // Create a new instance of DbConnection
        $db = new DbConnection();

        // Attempt to connect to the database
        $conn = $db->connect();

        // Check if the connection is a valid PDO instance
        $this->assertInstanceOf(PDO::class, $conn, 'Database connection should return a PDO instance.');

        // Run a simple query to verify the connection
        $stm = $conn->prepare("SELECT * FROM test");
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);

        // Verify that the result is an array
        $this->assertIsArray($result, 'Query result should be an array.');
    }
}
