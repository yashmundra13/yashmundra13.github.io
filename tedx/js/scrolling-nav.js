$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
        $(".navbar-fixed-top").addClass("scroll-active");
        $(".navbar-brand").show();
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
        $(".navbar-fixed-top").removeClass("scroll-active");
        $(".navbar-brand").show();
    }
});

$(function() {
    $("a.page-scroll").bind("click", function(event) {
        var $anchor = $(this);
        $("html, body").stop().animate({
            scrollTop: $($anchor.attr("href")).offset().top
        }, 1600, "easeInOutExpo");
        event.preventDefault();
    });
});

"use strict";

var Waves = function(canvasArg) {
    this.TRI_WIDTH = 120;
    this.TRI_HEIGHT = 35;
    this.canvas = canvasArg;
    this.ctx = this.canvas.getContext("2d");
};

Waves.prototype.start = function() {
    window.requestAnimationFrame(this._renderFrame.bind(this));
};

Waves.prototype.resize = function(width, height) {
    this.canvas.width = width;
    this.canvas.height = height;
};

Waves.prototype._drawTriangle = function(color, x1, y1, x2, y2, x3, y3) {
    this.ctx.fillStyle = color;
    this.ctx.beginPath();
    this.ctx.moveTo(x1, y1);
    this.ctx.lineTo(x2, y2);
    this.ctx.lineTo(x3, y3);
    this.ctx.closePath();
    this.ctx.fill();
};

Waves.prototype._deltaY = function(x, y, time) {
    return this.TRI_HEIGHT * 3 * Math.sin(y / 5 + time / 500) * Math.sin(y / 2 + time / 700) * Math.sin(x / 2 + time / 2500) / 2;
};

Waves.prototype._triColor = function(x1, y1, x2, y2, x3, y3) {
    var vertRatio = (y1 + y2 + y3) / 3 / (this.canvas.height + this.TRI_HEIGHT);
    var scale = chroma.scale([ "#0033a0", "#000" ]).mode("lab");
    return scale(vertRatio).hex();
};

Waves.prototype._renderFrame = function(timestamp) {
    var color, i, j, x1, x2, x3, y1, y2, y3, x4, y4;
    var offsetI;
    var halfW = this.TRI_WIDTH / 2;
    for (j = -this.TRI_HEIGHT; j < this.canvas.height + this.TRI_HEIGHT; j += this.TRI_HEIGHT) {
        offsetI = j / this.TRI_HEIGHT % 2 == 0 ? 0 : -this.TRI_WIDTH / 2;
        for (i = -this.TRI_WIDTH + offsetI; i < this.canvas.width + this.TRI_WIDTH; i += this.TRI_WIDTH) {
            x1 = i;
            y1 = j;
            x2 = i - halfW;
            y2 = j + this.TRI_HEIGHT;
            x3 = i + halfW;
            y3 = j + this.TRI_HEIGHT;
            x4 = i + this.TRI_WIDTH;
            y4 = j;
            y1 += this._deltaY(x1, y1, timestamp);
            y2 += this._deltaY(x2, y2, timestamp);
            y3 += this._deltaY(x3, y3, timestamp);
            y4 += this._deltaY(x4, y4, timestamp);
            this._drawTriangle(this._triColor(x1, y1, x2, y2, x3, y3), x1, y1, x2, y2, x3, y3);
            this._drawTriangle(this._triColor(x1, y1, x3, y3, x4, y4), x1, y1, x3, y3, x4, y4);
        }
    }
    window.requestAnimationFrame(this._renderFrame.bind(this));
};

window.addEventListener("load", function() {
    var waves = new Waves(document.getElementById("mywaves"));
    waves.resize(window.innerWidth, window.innerHeight);
    window.addEventListener("resize", function() {
        waves.resize(window.innerWidth, window.innerHeight);
    }, false);
    waves.start();
});

$(function() {
    var today = new Date("September 23, 2016 12:00:00");
    console.log(today);
    $("#countdown").countdown({
        until: today
    });
});