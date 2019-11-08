<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>bitcoin</title>
    </head>
    <body>
        <?php
            $original_url = 'https://api.coingecko.com/api/v3/coins/zcash';
            $response = file_get_contents($original_url);
            $response = json_decode($response, true);
            // print_r($response['categories']);
            // die();
            
            ?>
        <form>
            <h3>ID:</h3>
            <label><?php echo $response['id'];?></label>
            <h3>Symbol:</h3>
            <label><?php echo $response['symbol'];?></label>
            <h3>Name:</h3>
            <label><?php echo $response['name'];?></label>
            <h3>Asset Platform ID:</h3>
            <label><?php echo $response['asset_platform_id'];?></label>
            <h3>Block Time:</h3>
            <label><?php echo $response['block_time_in_minutes'];?></label>
        </form>
    </body>
</html>