<form class="justify-content-center text-center" method="POST" action="#comments">
    <div class="form-row justify-content-center text-center">
        <div class="col-sm-12 col-lg-4">
            <input name="username" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Adınız">
        </div>
        <div class="col-sm-12 col-lg-4">
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">@</div>
                </div>
                <input name="mailname" type="text" class="form-control" id="inlineFormInputGroup"
                    placeholder="Mail Adresiniz">
            </div>
        </div>

    </div>
    <div class="form-row justify-content-center text-center">
        <div class="col-sm-12 col-lg-8">
            <input name="comment" type="text" class="form-control mt-2" placeholder="Yorumunuz">
        </div>
    </div>
    <div class="form-row justify-content-center mt-2">
        <div class="col-sm-12 col-lg-4">
            <a data-toggle="modal" data-target="#exampleModal" class="btn btn-light btn-xl px-5 mt-3">Gönder</a>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content  bg-first">
                <div class="modal-header">
                    <h5 class="modal-title text-light" id="exampleModalLabel">Duyuru</h5>
                </div>
                <div class="modal-body bg-light">
                    <h5 class="text-justify text-dark font-courier-prime">
                        Buluşmamızın hatırası olarak senin için hazırlayacağım
                        dijital kartpostala sahip olmak istersen sergideki en
                        beğendiğin fotoğrafı benimle paylaş.
                    </h5>
                    <!-- <h5 class="text-justify text-dark font-courier-prime">
                        Yorum Sistemi geçiçi olarak devre dışıdır. Anlayışınız için teşekkürler.
                    </h5>-->
                </div>
                <div class="modal-footer">
                    <button name="submit" type="submit" class="btn btn-light btn-xl px-5 mt-3">Gönder</button>
                    <input type="input" name="recaptchaCevabi" id="recaptchaCevabi">
                </div>
            </div>
        </div>
    </div>

</form>
<script src="https://www.google.com/recaptcha/api.js?render=6Ld_GAoaAAAAALvAglykYENe7O_zIrqM_onYBH3p"></script>
<script>
    grecaptcha.ready(function () {
        grecaptcha.execute('6Ld_GAoaAAAAALvAglykYENe7O_zIrqM_onYBH3p', {
            action: 'submit'
        }).then(function (token) {
            document.getElementById("recaptchaCevabi").value = token;
        });
    });
</script>

<?php 
if (isset($_POST["submit"])) {

    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '';
    $recaptcha_response = $_POST['recaptchaCevabi'];

    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    if ($recaptcha->score >= 0.5) {
        $username=$_POST["username"];
        $mail=$_POST["mailname"];
        $comment=$_POST["comment"];
        $time=new DateTime();
        $time->format('Y-m-d');

        $yorum_yap=$db->prepare('INSERT INTO comments SET
        username=?,
        mail=?,
        comment=?,
        time=?');
    
        $gonder=$yorum_yap->execute([$username,$mail,$comment,$time->format('Y-m-d')]);
        echo '<meta http-equiv="refresh" content="1;URL=index.php">';

    } else {
        echo "Spam yorum algılandı. Lütfen iletişime geçiniz.";
        echo print_r($recaptcha);
        var_dump($recaptcha);
        
    }
}
?>
