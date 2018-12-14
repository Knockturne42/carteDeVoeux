$("#container").mousemove(function(e) {
    parallaxIt(e, ".moonLight", -40);
    parallaxIt(e, ".moon", -30);
    parallaxIt(e, ".mountain", -150);
});

function parallaxIt(e, target, movement) {
    var $this = $("#container");
    var relX = e.pageX - $this.offset().left;
    var relY = e.pageY - $this.offset().top;

    TweenMax.to(target, 1, {
        x: (relX - $this.width() / 2) / $this.width() * movement,
        y: (relY - $this.height() / 2) / $this.height() * movement
    });
}

sound = document.getElementById('sound');
document.addEventListener("click", function(){
    sound.play();
});
