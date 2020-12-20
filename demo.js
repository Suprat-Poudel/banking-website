var title = ['<p>The Sparks Foundation.</p>','<p>Created by Suprat Poudel.</p>','<p>Never share your Card dtails with others.</p>'];
var index = 0;

function change_title() {
    var x = title[index];
    $('.main').html(x);
    index++;
    if (index >= title.length) { index = 0; }
};

function change_left() {
    $('div').removeClass('slide-right').addClass('slide-left');
}

function change_right() {
    $('div').removeClass('slide-left').addClass('slide-right');
    change_title();
}

function to_left() {
setInterval(change_left, 10000);
};

function to_right() {
    setInterval(change_right, 20000);
};

to_left();
to_right();