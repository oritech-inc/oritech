$(function(){

    //Get client screen size (width x height), 
    //Sidebar and main content

    const w = window.screen.width;
    const h = window.screen.height;

    //DOM size object to set sidebar + content 
    const dom_size = {
        side: [calcPrc(15, w), calcPrc(100, h)],
        main: [calcPrc(85, w), calcPrc(100, h)],
    }

    //Function to calculate percentage
    //@params: percentage value, total amount, Returns total
    function calcPrc(val, sum) {
        const total = (parseFloat(sum) * parseFloat(val / 100));
        return Math.round(total);
    }
    $('#main-app').css({'width':w+"px",'height':h+"px"});
    $('#sidebar').css({'width':dom_size.side[0]+"px",'height':dom_size.side[1]+"px"});
    $('#content').css({'width':dom_size.main[0]+"px",'height':dom_size.main[1]+"px"});
    

    $('.bt-link').click(function (e) {
        e.preventDefault();
        const link = $(this).attr('data-link');
        if (link === 'logout') {
            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: '/incl/auth.php',
                data: { logoutUser: 1 },
                success: function (output) {
                    if (output.results === "done") {
                        window.location.href = '/';
                    } else {
                        console.log(output);
                    }
                }
            });
        }
    });
    

});