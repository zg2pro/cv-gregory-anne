$(document).ready(function () {

    var selectAction = function (liElt) {
        var section = liElt.parent("ul").parent("li").attr("section");
        var ind = liElt.index();
        liElt.append("<input type='hidden' name='" + section + "[]' value='" + ind + "' />");
    };
    var deselectAction = function (liElt) {
        var section = liElt.parent("ul").parent("li").attr("section");
        var ind = liElt.index();
        $("input[type='hidden'][name='" + section + "[]'][value='" + ind + "']").remove();
    };

    $("div.modal#print-modal div.modal-body").jstree({
        "checkbox": {
            "keep_selected_style": false
        },
        "plugins": ["checkbox"]
    }).bind("select_node.jstree", function (e, data) {
        var treeReference = this;
        var liElt = $("#" + data.node.id);
        if (!liElt.hasClass("main")) {
            selectAction(liElt);
        } else {
            var nodeOpen = $.jstree.reference(treeReference).is_open("#" + data.node.id);
            if (!nodeOpen) {
                $.jstree.reference(treeReference).open_node("#" + data.node.id);
            }
            liElt.find("ul").find("li").each(function () {
                selectAction($(this));
            });
        }
    })
            .bind("deselect_node.jstree", function (e, data) {
                var treeReference = this;
                var liElt = $("#" + data.node.id);
                if (!liElt.hasClass("main")) {
                    deselectAction(liElt);
                } else {
                    var nodeOpen = $.jstree.reference(treeReference).is_open("#" + data.node.id);
                    if (!nodeOpen) {
                        $.jstree.reference(treeReference).open_node("#" + data.node.id);
                    }
                    liElt.find("ul").find("li").each(function () {
                        deselectAction($(this));
                    });
                    if (!nodeOpen) {
                        $.jstree.reference(treeReference).close_node("#" + data.node.id);
                    }

                }
            });
});