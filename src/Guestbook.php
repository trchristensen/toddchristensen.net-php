<?php

namespace App;

use App\DB;
use PDO;

class Guestbook
{
    private $db;

    public function __construct(DB $databaseConnection)
    {
        $this->db = $databaseConnection->getConnection();
    }

    public function sendMagicLink($email)
    {
        // Use curl to send a POST request to Stytch API
        // Endpoint: https://test.stytch.com/v1/magic_links/email/login_or_create
        // Pass the user's email and your redirect URLs

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://test.stytch.com/v1/magic_links/email/login_or_create",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode([
                "email" => $email,
                "login_magic_link_url" => "http://tc.test/authenticate",
                "signup_magic_link_url" => "http://tc.test/authenticate"
            ]),
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json",
                "Authorization: Basic " . base64_encode("project-test-70833b2f-7897-40ea-847e-7b2ccc8108b3:secret-test-FMf-Fvzih7lqQaf2b4Q7vUSX2vidLnLxQ5Q=")
            ],
        ]);

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }

    public function getAllEntries()
    {
        $stmt = $this->db->query("SELECT * FROM guestbook ORDER BY timestamp DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function addEntry($name, $message)
    {
        $stmt = $this->db->prepare("INSERT INTO guestbook (name, message) VALUES (:name, :message)");
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':message', $message, PDO::PARAM_STR);
        $stmt->execute();
    }
}
