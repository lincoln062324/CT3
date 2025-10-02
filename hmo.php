
<?php
                        include 'connect.php';
                        error_reporting(0);
                        $query = "SELECT * FROM pat";
                        $data = mysqli_query($conn, $query);
                        $total = mysqli_num_rows($data);

                        if($total !=0){
                            while($result = mysqli_fetch_assoc($data)){
                                echo "
                                <tbody>
                                <tr class='data2'>
                                    <td>".$result['id']."</td>
                                    <td>".$result['p_id']."</td>
                                    <td>".$result['v_id']."</td>
                                    <td>".$result['n_hmo']."</td>
                                    <td>".$result['cmember_no']."</td>
                                    <td>".$result['t_plan']."</td>
                                    <td>".$result['coverage']."</td>
                                    <td>".$result['accred']."</td>
                                    <td>".$result['loa']."</td>
                                    <td>".$result['dt_tm']."</td>
                                    <td>
                                        <a href='patient_edit.php?p_id=$result[p_id]'><button type='button' class='btn-edit'>Edit</button></a>
                                        <a href='patient_delete.php?p_id=$result[p_id]'><button type='button' class='btn-delete'>Archive</button></a>
                                    </td>
                                </tr>
                                </tbody>
                                ";
                            }
                        }
?>