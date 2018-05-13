if (window.Foundation) {

    // Zip
    Foundation.Abide.defaults.patterns['zip']          = /^\d{5}(-\d{4})?$/;

    // Minimum Length
    Foundation.Abide.defaults.validators['min_length'] = function ($el, required, parent) {
        if (!required) return true;
        var minLength = $el.attr('data-min-length') || 1,
            length    = $el.val().length;
        return length >= minLength;
    };


}




