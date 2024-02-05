<?php
        define( "SRV_ID3",       "2745");
                $json_url3 = "https://api.rust-servers.info/info/".SRV_ID3."";
                $json_string3 = file_get_contents($json_url3);
                $parsed_json3 = json_decode($json_string3,true);

                $status_page3 = "https://api.rust-servers.info/status/".SRV_ID3."";
                $status_json3 = file_get_contents($status_page3);
                $status_parsed_json3 = json_decode($status_json3,true);

                        //Server core
						$hostname3       = $parsed_json3['hostname'];
                        $ip3             = $parsed_json3['ip'];
                        $port3           = $parsed_json3['port'];
                        $version3        = $parsed_json3['version'];
                        $status3         = $parsed_json3['online_state'];
                                if($status3 == "1")
                                        {$status3 = "Online";}
                                elseif($status3 == "0")
                                        {$status3 = "Offline";};
                        $uptime3         = $status_parsed_json3['uptime'];
                        $checked3        = $parsed_json3['checked'];
                        $fps3            = $parsed_json3['fps'];
                        $fps_avg3        = $parsed_json3['fps_avg'];
                        $url3            = $parsed_json3['url'];
                        $image3          = $parsed_json3['image'];
                        $os3             = $parsed_json3['os'];
                        $mem3            = $parsed_json3['mem'];
                        $country_code3   = $parsed_json3['country'];
                        $country_full3   = $parsed_json3['country_full'];
						$server_mode3	= $parsed_json3['server_mode'];
                        $wipe_cycle3		= $parsed_json3['wipe_cycle'];
                        
                        //Players
                        $players_max3    = $parsed_json3['players_max'];
                        $players_cur3    = $parsed_json3['players_cur'];
                        $players_avg3    = $parsed_json3['players_avg'];
						$players_maxman3 = $parsed_json3['players_maxman'];
						$players_maxf3	= $parsed_json3['players_max_forever'];
						$players_maxfd3	= $parsed_json3['players_max_forever_date'];
                        $bots3			= $parsed_json3['bots'];
                        
						//Map
                        $map3            = $parsed_json3['map'];
                        $size3           = $parsed_json3['size'];
                        $seed3           = $parsed_json3['seed'];
                        $entities3       = $parsed_json3['entities'];
?>