<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>bitcoin</title>
    </head>
    <body>
        <?php
            $original_url = 'https://api.coingecko.com/api/v3/coins/bitcoin';
            $response = file_get_contents($original_url);
            $response = json_decode($response, true);
            // print_r($response['categories']);
            // die();
            
            ?>
        <form>
               ID:<br>
                <h3><?php echo $response['id'];?></h3>
                Symbol:
                <h3><?php echo $response['symbol'];?></h3>
                Name:
                <h3><?php echo $response['name'];?></h3>
                Asset Platform ID:
                <h3><?php echo $response['asset_platform_id'];?></h3>
                Block Time:
                <h3><?php echo $response['block_time_in_minutes'];?></h3>
                Categories:
        </form>
    </body>
</html>