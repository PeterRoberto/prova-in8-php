<?php include('connect.php'); ?>

<section class="three-section padd-height">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center title-sections">Lista de cadastro</h2>
 
                <table class="table-cadastro hidden-xs">
                    <tr>
                        <td width="122"></td>
                        <td width="220" class="name-box">Nome</td>
                        <td width="220" class="name-box">E-mail</td>
                        <td width="220" class="name-box">Nascimento</td>
                        <td width="220" class="name-box">Telefone</td>
                    </tr>

                    <?php
                        try {
                            $connection = $cms_connection->prepare("SELECT * FROM USUARIOS");
                            $connection->execute();
                            $post = array();
                            $post['status'] = true;
                            $post['data'] = $connection->fetchAll();
                            $posts = $post['data'];
                        }
                        catch(PDOException $ex){
                            return 0;
                        }
                        for ($i = 0; $i <= sizeof($posts)-1; $i++) {     
                            ?>
                            <tr>
                                <td class="id-number"><?php echo $posts[$i]["id"]; ?></td>
                                <td><?php echo $posts[$i]["nome"]; ?></td>
                                <td><?php echo $posts[$i]["email"]; ?></td>
                                <td><?php echo $posts[$i]["nascimento"]; ?></td>
                                <td><?php echo $posts[$i]["telefone"]; ?></td>
                            </tr>
                            <?php 
                        }
                    ?>
                </table>


                <?php
                    ?>
                    <ul class="nav nav-tabs tab-mobile hidden-lg hidden-md hidden-sm" id="myTab">
                        <?php
                            for ($i = 0; $i <= sizeof($posts)-1; $i++) {     
                                ?>
                                <li class="<?php if($i === 0) { echo 'active';} ?>"><a href="#id<?php echo $i; ?>" data-toggle="tab"><?php echo $posts[$i]["id"]; ?></a></li>
                                <?php 
                            }
                        ?>
                    </ul>
                    <?php
                ?>


                <?php 
                    ?>
                    <div class="tab-content tab-content-mobile hidden-lg hidden-md hidden-sm">
                        <?php
                            for ($i = 0; $i <= sizeof($posts)-1; $i++) {     
                                ?>

                                <div class="tab-pane <?php if($i === 0) { echo 'active';} ?>" id="id<?php echo $i; ?>">
                                    <div class="info-fields">
                                        <h4>Nome</h4> 
                                        <span><?php echo $posts[$i]["nome"]; ?></span>
                                    </div>
                                    <div class="info-fields">
                                        <h4>Email</h4> 
                                        <span><?php echo $posts[$i]["email"]; ?></span>
                                    </div>
                                    <div class="info-fields">
                                        <h4>Nasc.</h4> 
                                        <span><?php echo $posts[$i]["nascimento"]; ?></span>
                                    </div>
                                    <div class="info-fields">
                                        <h4>Tel.</h4> 
                                        <span><?php echo $posts[$i]["telefone"]; ?></span>
                                    </div>
                                </div> 
                                <?php 
                            }
                        ?>
                    </div>
                    <?php
                ?>

            </div>
        </div>
    </div>
</section>