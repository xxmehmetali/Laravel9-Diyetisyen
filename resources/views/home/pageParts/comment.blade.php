<!-- Comments Start -->
<div class="row">
    <div class="col-md-8">
        <div class="comment-container theme--light">
            <div class="comments" >
                <div class="card v-card v-sheet theme--light elevation-2" ><span class="headline" >Leave a comment</span>
                    <div class="sign-in-wrapper" >
                        <p class="caption disclaimer" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi gravida lacinia faucibus. Sed tincidunt ex sem, non gravida odio fermentum sit amet.</p>
                        <p class="error-message" ></p>
                    </div>
                    <!---->
                </div>
                @foreach($comments as $comment)
                    <div >
                        <div class="card v-card v-sheet theme--light elevation-2">
                            <div  class="header">
                                <div  class="v-avatar avatar" style="height: 50px; width: 50px;"><img  src="https://images.unsplash.com/photo-1490894641324-cfac2f5cd077?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=100&q=70"></div>
                                <span  class="displayName title">İsim : {{ $comment->getUser->name}}</span><br>
                                <span  style="font-size: 16px; margin-left: 30px">Konu : {{ $comment->subject }}</span>
                            </div>
                            <!---->
                            <div  class="wrapper comment" style="margin-top: 20px;">
                                <p>Yorum : {{ $comment->comment }}</p>
                            </div>
                            <div  class="actions">

                            </div>
                            <div  class="v-dialog__container" style="display: block;"></div>
                        </div>
                        <!---->
                        <div  class="answers">
                            <!---->
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="col-md-3">

        <form action="/action_page.php">
            <label for="fname">Konu :</label><br>
            <input type="text" id="fname" placeholder="Konu"><br><br>

            <label for="fname">Puanınız :</label><br>
            <select class="form-control" name="status">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>

            <label for="fname">Yorum :</label><br>
            <textarea style="width: 100%" name="" id="" cols="30" rows="6" placeholder="Yorum"></textarea>
            <input type="submit" value="Gönder">
        </form>


    </div>
</div>
<!-- Comments End -->
