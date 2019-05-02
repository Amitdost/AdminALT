$('document').ready(function(){
/**Get Base Url */
var baseurl=$('#base_url').val();
    $('.menu-toggle').click(function(){
        $('nav').toggleClass('active');
    });

    /**Save Post Category By Ajax */
    $('#post_cat_btn').on('click',function(event){
        var post=$('#post_cat').val();
        console.log('hgghg');
        $.ajax({
            type:'POST',
            url: baseurl+"index.php/Setting/save_post_cat/",
            data: {cat:post},
            success: function(result){
            $('#response').html('<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Successfully added!</strong> <p style="red">'+ result +'</p> </div>');
            console.log(result);
            }
            });
    });

});