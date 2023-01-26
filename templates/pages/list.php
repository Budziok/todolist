
<div>
    <div class="message">
        <?php if(!empty($params['before'])){
                switch($params['before']) {
                    case 'created':
                        echo 'Notatka została utworzona';
                    break;
                }
            }
            ?>
    </div>
    <?php dump($params) ?>
    <h4>lista notatek</h4>  
    <br/><?php echo $params['resultList'] ?? ""; ?>
</div>
