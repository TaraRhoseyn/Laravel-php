class DbConnectionTest extends TestCase {
    public function testDatabaseConnection() {
        $db = new DbConnection();
        $conn = $db->connect();
        $this->assertInstanceOf(PDO::class, $conn, 'Database connection should return a PDO instance.');
        $stm = $conn->prepare("SELECT * FROM test");
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        $this->assertIsArray($result, 'Query result should be an array.');
    }
}
