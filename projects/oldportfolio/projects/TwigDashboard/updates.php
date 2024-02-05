<?php 

                // Server
                $update_page = "https://api.rust-servers.info/update_server/";
                $update_json = file_get_contents($update_page);
                $update_parsed_json = json_decode($update_json,true);


                // Client
                $client_page = "https://api.rust-servers.info/update/";
                $client_json = file_get_contents($client_page);
                $client_parsed_json = json_decode($client_json,true);

                        // Server Update
                        $server_utime  = $server_update_parsed_json['datetime_full'];
                        $server_bid  = $server_update_parsed_json['buildID'];

                        // Client Update
                        $client_utime  = $client_parsed_json['datetime_full'];
                        $client_bid  = $client_parsed_json['buildID'];

?>