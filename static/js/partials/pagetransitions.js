var transition = (function () {
    var global = {
        animationEndEventName: undefined
    }

    function animationEndEventName() {
        if (global.animationEndEventName !== undefined) {
            return !!global.animationEndEventName
        }

        var detectedAnimation,
            el = document.createElement('animationdetector'),
            animations = {
                'WebkitAnimation': 'webkitAnimationEnd',
                'OAnimation': 'oAnimationEnd oanimationend',
                'msAnimation': 'animationend',
                'animation': 'animationend'
            }

        Object.keys(animations).some(function (animation) {
            if (el.style[animation] !== undefined) {
                detectedAnimation = animations[animation]

                return true
            }

            return false
        })

        if (!detectedAnimation) {
            detectedAnimation = false
        }

        return (global.animationEndEventName = detectedAnimation)
    }

    var isAnimating = false,
        endCurrPage = false,
        endNextPage = false,
        animationEndEvent = animationEndEventName(), // animation end event name
        support = !!animationEndEventName() // support css animations

    function init($pages) {
        $pages.each(function () {
            $page = $(this)
            $page.data('originalClassList', $page.attr('class'));
        });

        var $firstPage = $pages instanceof Array ? $pages[0] : $pages.eq(0)
        $firstPage.addClass('pt-page-current');
    }

    function animatePage($currPage, $nextPage, animation, callback) {
        if (isAnimating) {
            return false;
        }

        isAnimating = true;

        $nextPage.addClass('pt-page-current')

        var outClass = '',
            inClass = '';

        switch (animation) {

            case 5:
                outClass = 'pt-page-fade';
                inClass = 'pt-page-moveFromRight pt-page-ontop';
                break;
            case 6:
                outClass = 'pt-page-fade';
                inClass = 'pt-page-moveFromLeft pt-page-ontop';
                break;

        }

        $currPage.addClass(outClass).on(animationEndEvent, function () {
            $currPage.off(animationEndEvent);
            endCurrPage = true;
            if (endNextPage) {
                onEndAnimation($currPage, $nextPage, callback);
            }
        });

        $nextPage.addClass(inClass).on(animationEndEvent, function () {
            $nextPage.off(animationEndEvent);
            endNextPage = true;
            if (endCurrPage) {
                onEndAnimation($currPage, $nextPage, callback);
            }
        });

        if (!support) {
            onEndAnimation($currPage, $nextPage, callback);
        }

        return true
    }

    function onEndAnimation($outpage, $inpage, callback) {
        endCurrPage = false;
        endNextPage = false;
        resetPage($outpage, $inpage);
        isAnimating = false;

        callback instanceof Function && callback()
    }

    function resetPage($outpage, $inpage) {
        $outpage.attr('class', $outpage.data('originalClassList'));
        $inpage.attr('class', $inpage.data('originalClassList') + ' pt-page-current');
    }

    return {
        init: init,
        animate: animatePage
    }
})();

jQuery(function() {
	var $pages = $('.pt-page');

	transition.init($pages);

	var current = 0;

	$('.right').on('click', function () {

	    var nextPage = current + 1;
	    if (nextPage > $pages.length - 1) {
	        nextPage = 0;
	    }
	    var animationRuned = transition.animate($pages.eq(current), $pages.eq(nextPage), 5)

	    if (animationRuned) {
	        current = nextPage;
	    }
	})

	$('.left').on('click', function () {

	    var nextPage = current - 1;
	    if (nextPage < 0) {
	        nextPage = $pages.length - 1;
	    }
	    var animationRuned = transition.animate($pages.eq(current), $pages.eq(nextPage), 6)

	    if (animationRuned) {
	        current = nextPage;
	    }
	});
	
	//
	//$(document).keydown(function(e) {
	//    if(e.which == 37) { // left
	//        $('.left').trigger("click");
	//    }
	//    else if(e.which == 39) { // right
	//        $('.right').trigger("click");
	//    }
	//});
})