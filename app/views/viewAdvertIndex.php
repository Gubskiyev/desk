<div class="container">
    <table class="table table-striped" align="center" width="500px">
        <?php foreach($data as $advert): ;?>
        <tr>
            <td>
                <?=$advert['title']?>
            </td>
        </tr>
        <tr>
            <td>
                <?=$advert['text']?>
            </td>
        </tr>
        <tr>
            <td>
                <?=$advert['phone']?>
            </td>
        </tr>
        <tr>
            <td>
                <?=$advert['user']?>
            </td>
        </tr>
        <?php endforeach ;?>
    </table>
</div>