<?php
        define( "SRV_ID2",       "1750");
                $json_url2 = "https://api.rust-servers.info/info/".SRV_ID2."";
                $json_string2 = file_get_contents($json_url2);
                $parsed_json2 = json_decode($json_string2,true);

                $status_page2 = "https://api.rust-servers.info/status/".SRV_ID2."";
                $status_json2 = file_get_contents($status_page2);
                $status_parsed_json2 = json_decode($status_json2,true);

                        //Server core
						$hostname2       = $parsed_json2['hostname'];
                        $ip2             = $parsed_json2['ip'];
                        $port2           = $parsed_json2['port'];
                        $version2        = $parsed_json2['version'];
                        $status2         = $parsed_json2['online_state'];
                                if($status2 == "1")
                                        {$status2 = "Online";}
                                elseif($status2 == "0")
                                        {$status2 = "Offline";};
                        $uptime2         = $status_parsed_json2['uptime'];
                        $checked2        = $parsed_json2['checked'];
                        $fps2            = $parsed_json2['fps'];
                        $fps_avg2        = $parsed_json2['fps_avg'];
                        $url2            = $parsed_json2['url'];
                        $image2          = $parsed_json2['image'];
                        $os2             = $parsed_json2['os'];
                        $mem2            = $parsed_json2['mem'];
                        $country_code2   = $parsed_json2['country'];
                        $country_full2   = $parsed_json2['country_full'];
						$server_mode2	= $parsed_json2['server_mode'];
                        $wipe_cycle2		= $parsed_json2['wipe_cycle'];
                        
                        //Players
                        $players_max2    = $parsed_json2['players_max'];
                        $players_cur2    = $parsed_json2['players_cur'];
                        $players_avg2    = $parsed_json2['players_avg'];
						$players_maxman2 = $parsed_json2['players_maxman'];
						$players_maxf2	= $parsed_json2['players_max_forever'];
						$players_maxfd2	= $parsed_json2['players_max_forever_date'];
                        $bots2			= $parsed_json2['bots'];
                        
						//Map
                        $map2            = $parsed_json2['map'];
                        $size2           = $parsed_json2['size'];
                        $seed2           = $parsed_json2['seed'];
                        $entities2       = $parsed_json2['entities'];
?>