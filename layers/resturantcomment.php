<?php
?>
<div id="commentModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <div class="okmessage d-none">
                    ثبت پیام انجام شد!
                </div>

                <button type="button" class="close modal-close-btn" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <h4 class="modal-title">درج کامنت برای رستوران
                <span>
                    &nbsp;
                    <?= $contractor->brandName?>
                </span>
                </h4>
                <form class="restourantCommentForm" method="post">
                    <input type="hidden" value="<?=$user_id?>" name="userid" id="userid">
                    <input type="hidden" value="<?=$contractor->contractor_id?>" name="restaurantid" id="restaurantid">
                    <textarea name="comment" id="comment" class="w-100">

                    </textarea>

                    <input type="submit" value="ثبت" class="btn modal-btn">
                </form>
                <div class="falsemessage d-none">
                   خطایی رخ داده است.
                </div>
                <div class="errormessage d-none">
                    داده ارسالی مشکلی دارد.
                </div>
            </div>
        </div>

    </div>
</div>

