<?php
        define( "SRV_ID",       "1743");
                $json_url = "https://api.rust-servers.info/info/".SRV_ID."";
                $json_string = file_get_contents($json_url.$playerlist_url);
                $parsed_json = json_decode($json_string,true);

                $status_page = "https://api.rust-servers.info/status/".SRV_ID."";
                $status_json = file_get_contents($status_page);
                $status_parsed_json = json_decode($status_json,true);

                $playerlist_url = "https://api.rust-servers.info/players/".SRV_ID."";
                $parsed_json = json_decode($json_string,true);

                        //Server core
			$hostname       = $parsed_json['hostname'];
                        $ip             = $parsed_json['ip'];
                        $port           = $parsed_json['port'];
                        $version        = $parsed_json['version'];

                        $status         = $parsed_json['online_state'];
                                if($status == "1")
                                        {$status = "Online";}
                                elseif($status == "0")
                                        {$status = "Offline";};
                                        
                        $uptime         = $status_parsed_json['uptime'];
                        $checked        = $parsed_json['checked'];
                        $fps            = $parsed_json['fps'];
                        $fps_avg        = $parsed_json['fps_avg'];
                        $url            = $parsed_json['url'];
                        $image          = $parsed_json['image'];
                        $os             = $parsed_json['os'];
                        $mem            = $parsed_json['mem'];
                        $country_code   = $parsed_json['country'];
                        $country_full   = $parsed_json['country_full'];
			$server_mode	= $parsed_json['server_mode'];
                        $wipe_cycle	= $parsed_json['wipe_cycle'];
                        
                        //Players
                        $players_max    = $parsed_json['players_max'];
                        $players_cur    = $parsed_json['players_cur'];
                        $players_avg    = $parsed_json['players_avg'];
			$players_maxman = $parsed_json['players_maxman'];
			$players_maxf	= $parsed_json['players_max_forever'];
			$players_maxfd	= $parsed_json['players_max_forever_date'];
                        $bots		= $parsed_json['bots'];
                        
			//Map
                        $map            = $parsed_json['map'];
                        $size           = $parsed_json['size'];
                        $seed           = $parsed_json['seed'];
                        $entities       = $parsed_json['entities'];
                        
                        //Player List
                        $player_names			= $parsed_json['name'];
                        $player_playtimeSec		= $parsed_json['play_time_in_seconds'];
                        $player_playtimeHum		= $parsed_json['play_time_human'];
?>