<?php
        define( "SRV_ID4",       "2750");
                $json_url4 = "https://api.rust-servers.info/info/".SRV_ID4."";
                $json_string4 = file_get_contents($json_url4);
                $parsed_json4 = json_decode($json_string4,true);

                $status_page4 = "https://api.rust-servers.info/status/".SRV_ID4."";
                $status_json4 = file_get_contents($status_page4);
                $status_parsed_json4 = json_decode($status_json4,true);

                        //Server core
						$hostname4       = $parsed_json4['hostname'];
                        $ip4             = $parsed_json4['ip'];
                        $port4           = $parsed_json4['port'];
                        $version4        = $parsed_json4['version'];
                        $status4         = $parsed_json4['online_state'];
                                if($status4 == "1")
                                        {$status4 = "Online";}
                                elseif($status4 == "0")
                                        {$status4 = "Offline";};
                        $uptime4         = $status_parsed_json4['uptime'];
                        $checked4        = $parsed_json4['checked'];
                        $fps4            = $parsed_json4['fps'];
                        $fps_avg4        = $parsed_json4['fps_avg'];
                        $url4            = $parsed_json4['url'];
                        $image4          = $parsed_json4['image'];
                        $os4             = $parsed_json4['os'];
                        $mem4            = $parsed_json4['mem'];
                        $country_code4   = $parsed_json4['country'];
                        $country_full4   = $parsed_json4['country_full'];
						$server_mode4	= $parsed_json4['server_mode'];
                        $wipe_cycle4		= $parsed_json4['wipe_cycle'];
                        
                        //Players
                        $players_max4    = $parsed_json4['players_max'];
                        $players_cur4    = $parsed_json4['players_cur'];
                        $players_avg4    = $parsed_json4['players_avg'];
						$players_maxman4 = $parsed_json4['players_maxman'];
						$players_maxf4	= $parsed_json4['players_max_forever'];
						$players_maxfd4	= $parsed_json4['players_max_forever_date'];
                        $bots4			= $parsed_json4['bots'];
                        
						//Map
                        $map4            = $parsed_json4['map'];
                        $size4           = $parsed_json4['size'];
                        $seed4           = $parsed_json4['seed'];
                        $entities4       = $parsed_json4['entities'];
?>