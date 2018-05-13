function bindForm(el, success, fail) {
    var $el = $(el);

    if (!$el.length) {
        return false;
    }

    success = success || function () {};
    fail = fail || function () {};

    $el.find('form').on('submit', function () {
        event.preventDefault();

    });
    $el.off('forminvalid.zf.abide').on("forminvalid.zf.abide", fail);
    $el.off('formvalid.zf.abide').on("formvalid.zf.abide", success);
}

module.exports = {
    bind: bindForm
};

