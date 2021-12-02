<?php
                    include '../database/allaboutfpo.php';
                    $query = "SELECT * FROM events WHERE catagory='$catagory' && courseID='$courseID'";
                    if ($result = mysqli_query($allaboutfpo_Conn, $query)) {
                       while($row = mysqli_fetch_array($result)){
                        $catagory = $row['catagory'];
                        $name = $row['name'];
                        $lastDateOfRegistration = $row['lastDateOfRegistration'];
                        $mode = $row['mode'];
                        $registrationLink = $row['registrationLink'];
                        $fees = $row['fees'];
                        $customID = $row['customID'];


                        print("
                        
                        <tr>
                            <th scope='row'>{$customID}</th>
                            <td>{$catagory}</td>
                            <td>{$name}</td>
                            <td>{$lastDateOfRegistration}</td>
                            <td>{$mode}</td>
                            <td>{$fees}</td>
                            <td><a href='{$registrationLink}' class='btn btn-primary'>Know More</a></td>
                        </tr>
                        
                        
                        ");
                       }
                      
                    }
