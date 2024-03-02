<?php
session_start();
    try {   
        $connection = new PDO("mysql:host=localhost; dbname=music;", "root", "");
    }
    catch (Exception $e) {
        echo "<h4 style='color:red';>" .$e->getMessage(). "</h4>";
    }

    function getAllItems($searchQuery = ''){
        global $connection;

        $request = "SELECT t.id, t.track, t.author, t.year, t.album
                FROM tracks t";
        $query = $connection->prepare($request);
        if (!empty($searchQuery)) {
            $request .= " WHERE t.track LIKE :searchQuery";
            $query = $connection->prepare($request);
            $searchParam = '%' . $searchQuery . '%';
            $query->bindParam(':searchQuery', $searchParam);
        }
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getItem($id){
        global $connection;

        $query = $connection->prepare("
            SELECT * 
            FROM tracks t
            WHERE t.id = $id; 
        ");

        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function addTrack($name, $author, $year, $album){
        global $connection;
        $query = $connection->prepare("
            INSERT INTO tracks (id, track, author, year, album)
            VALUES (NULL, :name, :author, :year, :album)
        ");

        $query->execute(array("name"=>$name, "author"=>$author, "year"=>$year, "album"=>$album));
    }

    function addUser($name, $login, $password){
        global $connection;
        $role = 'user';
        $query = $connection -> prepare("
            INSERT INTO users (user_name, login, password, role)
            VALUES (:name, :login, :password, :role)
        ");
        try{
            $query->execute(["name"=>$name, "login"=>$login, "password"=>$password, "role"=>$role]);
        }
        catch(PDOException $e){
            return false;
        }
        
        return true;
    }

    function checkUser($login, $password){
        global $connection;
        $query = $connection -> prepare("
            SELECT * FROM users WHERE login = :login and password = :password
        ");
        $query->execute(["login"=>$login, "password"=>$password]);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function changePassword($password, $id){
        global $connection;
        $query = $connection->prepare("
                UPDATE users SET password = :p WHERE id = :id
            ");
        $query->execute(['p'=>$password, 'id'=>$id]);
        return true;
    }
    

    function addComment($item_id, $user_id, $track_id, $comment) {
        global $connection;
                $query = $connection->prepare("
            INSERT INTO comments (user_id, track_id, date, comment)
            VALUES (:user_id, :track_id, NOW(), :comment)
        ");
        $query->execute(["user_id" => $user_id,"track_id" => $track_id,"comment" => $comment]);
    }


    function getComments($id, $timeFilter = 'all_time') {
        global $connection;

        $timeCondition = '';

        if ($timeFilter === 'last_24_hours') {
            $timeCondition = "AND c.date >= NOW() - INTERVAL 1 DAY";
        } elseif ($timeFilter === 'last_week') {
            $timeCondition = "AND c.date >= NOW() - INTERVAL 7 DAY";
        }

        $query = $connection->prepare("
            SELECT *
            FROM comments c
            JOIN tracks t ON c.track_id = t.id
            WHERE c.track_id = :id $timeCondition
            ORDER BY c.date DESC
        ");

        $query->execute(['id' => $id]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    function deleteComment($comment_id) {
        global $connection;
        $query = $connection->prepare("
            DELETE FROM comments WHERE id = :comment_id
        ");
        $query->execute(['comment_id' => $comment_id]);
    }

    function getUsers() {
        global $connection;
        $query = $connection->prepare("
            SELECT * FROM users
        ");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function updateRole($user_id, $current_role) {
        global $connection;
        if ($current_role === 'user') {
            $new_role = 'admin';
        } else {
            $new_role = 'user';
        }
        $query = $connection->prepare("
            UPDATE users SET role = :new_role WHERE id = :user_id
        ");
        $query->execute(['new_role' => $new_role, 'user_id' => $user_id]);
    }

    function deleteTrack($track_id) {
        global $connection;
        $query = $connection->prepare(
            "DELETE FROM tracks WHERE id = :track_id
            ");
        $query->execute(['track_id' => $track_id]);
    }

    function editTrack($track_id, $name, $author, $year, $album) {
        global $connection;
        $query = $connection->prepare("
            UPDATE tracks
            SET track = :name, author = :author, year = :year, album = :album
            WHERE id = :track_id
        ");

        $query->execute(['name' => $name, 'author' => $author, 'year' => $year, 'album' => $album, 'track_id' => $track_id]);
    }

    function addToLiked($user_id, $song_id) {
    global $connection;
    $queryCheck = $connection->prepare("
        SELECT * FROM favorites
        WHERE user_id = :user_id AND track_id = :song_id
    ");
    $queryCheck->execute(['user_id' => $user_id, 'song_id' => $song_id]);
    $existingFavorite = $queryCheck->fetch(PDO::FETCH_ASSOC);
    if (!$existingFavorite) {
        $query = $connection->prepare("
            INSERT INTO favorites (track_id, user_id)
            VALUES (:song_id, :user_id)
        ");
        $query->execute(['user_id' => $user_id, 'song_id' => $song_id]);
    }
}


    function getLikedTracks($user_id) {
        global $connection;
        $query = $connection->prepare("
            SELECT t.id, t.track, t.author, t.year, t.album
            FROM tracks t
            JOIN favorites f ON t.id = f.track_id
            WHERE f.user_id = :user_id
        ");
        $query->execute(['user_id' => $user_id]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function deleteFromLiked($user_id, $track_id) {
    global $connection;
    $query = $connection->prepare("
        DELETE FROM favorites 
        WHERE user_id = :user_id AND track_id = :track_id
    ");
    $query->execute(['user_id' => $user_id, 'track_id' => $track_id]);
}
?>