jQuery.fn.hover_edit = function () {

    this.hover(
            function () {
                jQuery(this).append('<div class="tnpc-row-edit-hover"><i class="fa fa-pencil" style="line-height:30px;"></i></div>');
                jQuery(".tnpc-row-edit-hover").click(function (e) {
                    e.preventDefault()
                });
                jQuery(".tnpc-row-edit-hover i").click(function (e) {
                    e.preventDefault();
                    $this = jQuery(this);
                    target = $this.parent().parent();
                    $this.parent().remove();

                    //edit image
                    if (target.attr("data-type") == 'image') {
                        jQuery("#tnpc-edit-image .image").val(target.find('img').attr("src"));
                        jQuery("#tnpc-edit-image .alt").val(target.find('img').attr("alt"));
                        jQuery("#tnpc-edit-image .url").val(target.find('a').attr("href"));
                        jQuery("#tnpc-edit-image").fadeIn(500);
                        jQuery("#tnpc-edit-image .tnpc-edit-box").slideDown(500);
                        jQuery("#tnpc-edit-image .tnpc-edit-box-buttons-save").click(function () {
                            jQuery(this).parent().parent().parent().fadeOut(500)
                            jQuery(this).parent().parent().slideUp(500)
                            target.find('img').attr("src", jQuery("#tnpc-edit-image .image").val());
                            target.find('img').attr("alt", jQuery("#tnpc-edit-image .alt").val());
                            target.find('a').attr("href", jQuery("#tnpc-edit-image .url").val());
                        });
                    }

                    //edit link
                    if (target.attr("data-type") == 'link') {
                        jQuery("#tnpc-edit-link .title").val(target.text());
                        jQuery("#tnpc-edit-link .url").val(target.attr("href"));
                        jQuery("#tnpc-edit-link").show();
                        jQuery("#tnpc-edit-link .tnpc-edit-box").show();
                        //jQuery("#tnpc-edit-link .tnpc-edit-box").slideDown(300);
                        jQuery("#tnpc-edit-link .tnpc-edit-box-buttons-save").click(function () {
                            jQuery(this).parent().parent().parent().fadeOut(500)
                            jQuery(this).parent().parent().slideUp(500)
                            target.text(jQuery("#tnpc-edit-link .title").val());
                            target.attr("href", jQuery("#tnpc-edit-link .url").val());
                        });
                    }

                    //edit button
                    if (target.attr("data-type") == 'button') {
                        jQuery("#tnpc-edit-button .title").val(target.text());
                        jQuery("#tnpc-edit-button .url").val(target.attr("href"));
                        jQuery('.bgcolor, .fgcolor').wpColorPicker({
                            //                change: function (event, ui) {
                            //                    jQuery('.bgcolor').iris('hide');
                            //                },
                        });
                        jQuery('.bgcolor').wpColorPicker().iris('color', target.css("background-color"));
                        jQuery('.fgcolor').wpColorPicker().iris('color', target.css("color"));
                        jQuery("#tnpc-edit-button").fadeIn(500);
                        jQuery("#tnpc-edit-button .tnpc-edit-box").slideDown(500);
                        jQuery("#tnpc-edit-button .tnpc-edit-box-buttons-save").click(function () {
                            jQuery(this).parent().parent().parent().fadeOut(500)
                            jQuery(this).parent().parent().slideUp(500)
                            target.text(jQuery("#tnpc-edit-button .title").val());
                            target.attr("href", jQuery("#tnpc-edit-button .url").val());
                            target.css("color", jQuery("#tnpc-edit-button .fgcolor").val());
                            target.css("background-color", jQuery("#tnpc-edit-button .bgcolor").val());
                            target.css("border-color", jQuery("#tnpc-edit-button .bgcolor").val());
                        });
                    }

                    //edit title
                    if (target.attr("data-type") == 'title') {
                        jQuery("#tnpc-edit-title .title").val(target.text());
                        jQuery("#tnpc-edit-title .color").val(target.css("color"));
                        jQuery("#tnpc-edit-title .color").wpColorPicker({
                            //                change: function (event, ui) {
                            //                    jQuery('.bgcolor').iris('hide');
                            //                },
                        });
                        jQuery("#tnpc-edit-title .color").wpColorPicker().iris('color', target.css("color"));
                        jQuery("#tnpc-edit-title").fadeIn(500);
                        jQuery("#tnpc-edit-title .tnpc-edit-box").slideDown(500);
                        jQuery("#tnpc-edit-title .tnpc-edit-box-buttons-save").click(function () {
                            jQuery(this).parent().parent().parent().fadeOut(500)
                            jQuery(this).parent().parent().slideUp(500)
                            target.text(jQuery("#tnpc-edit-title .title").val());
                            target.css("color", jQuery("#tnpc-edit-title .color").val());
                        });
                    }

                    //edit text
                    if (target.attr("data-type") == 'text') {
                        jQuery("#tnpc-edit-text .text").val(target.text());
                        tinymce.init({
                            selector: '#tnpc-edit-text .text',
                            menubar: false,
                            relative_urls: false,
                            remove_script_host: false,
                            toolbar: [
                                'fontselect fontsizeselect forecolor | bold italic underline | link | bullist numlist | emoticons | alignleft aligncenter alignright alignjustify tnp'
                            ],
                            plugins: "textcolor,link,emoticons",
                            init_instance_callback: function (editor) {
                                editor.setContent(target.html());
                            },
                            elementpath: false,
                            statusbar: false,
                            forced_root_block: false,
                            font_formats: "Arial=arial,helvetica,sans-serif" +
                                    "Arial Black=arial black,avant garde;" +
                                    "Tahoma=tahoma,arial,helvetica,sans-serif;" +
                                    "Trebuchet MS=trebuchet ms,geneva;" +
                                    "Verdana=verdana,geneva;" +
                                    "Georgia=georgia,palatino;" +
                                    "Times=times,times new roman;" +
                                    "Times New Roman=times new roman,times;" +
                                    "Courier=courier,courier new;" +
                                    "Courier New=courier new,courier",
                            setup: function (editor) {
                                editor.addButton('tnp', {
                                    type: 'menubutton',
                                    image: tinymce.baseURL + '/skins/tnp.png',
                                    menu: [
                                        {text: '{blog_url}', onclick: function () {console.log(this.text); editor.insertContent('&nbsp;{blog_url}&nbsp;');}},
                                        {text: '{blog_title}', onclick: function () {console.log(this.text); editor.insertContent('&nbsp;{blog_title}&nbsp;');}},
                                        {text: '{blog_description}', onclick: function () {console.log(this.text); editor.insertContent('&nbsp;{blog_description}&nbsp;');}},
                                        {text: '{date}', onclick: function () {console.log(this.text); editor.insertContent('&nbsp;{date}&nbsp;');}},
                                        {text: '{date_NNN}', onclick: function () {console.log(this.text); editor.insertContent('&nbsp;{date_NNN}&nbsp;');}},
                                        {text: '{email_url}', onclick: function () {console.log(this.text); editor.insertContent('&nbsp;{email_url}&nbsp;');}},
                                        {text: '{name}', onclick: function () {console.log(this.text); editor.insertContent('&nbsp;{name}&nbsp;');}},
                                        {text: '{surname}', onclick: function () {console.log(this.text); editor.insertContent('&nbsp;{surname}&nbsp;');}},
                                        {text: '{title}', onclick: function () {console.log(this.text); editor.insertContent('&nbsp;{title}&nbsp;');}},
                                        {text: '{email}', onclick: function () {console.log(this.text); editor.insertContent('&nbsp;{email}&nbsp;');}},
                                        {text: '{profile_N}', onclick: function () {console.log(this.text); editor.insertContent('&nbsp;{profile_N}&nbsp;');}},
                                        {text: '{ip}', onclick: function () {console.log(this.text); editor.insertContent('&nbsp;{ip}&nbsp;');}},
                                        {text: '{subscription_confirm_url}', onclick: function () {console.log(this.text); editor.insertContent('&nbsp;{subscription_confirm_url}&nbsp;');}},
                                        {text: '{unsubscription_confirm_url}', onclick: function () {console.log(this.text); editor.insertContent('&nbsp;{unsubscription_confirm_url}&nbsp;');}},
                                        {text: '{profile_url}', onclick: function () {console.log(this.text); editor.insertContent('&nbsp;{profile_url}&nbsp;');}},
                                    ],
                                });
                            },
                        });
                        if (tinymce.activeEditor != null)
                            tinymce.activeEditor.setContent(target.html());
                        jQuery("#tnpc-edit-text").fadeIn(500);
                        jQuery("#tnpc-edit-text .tnpc-edit-box").slideDown(500);
                        jQuery("#tnpc-edit-text .tnpc-edit-box-buttons-save").click(function () {
                            jQuery(this).parent().parent().parent().fadeOut(500)
                            jQuery(this).parent().parent().slideUp(500)
                            target.html(tinymce.activeEditor.getContent());
                        });
                    }

                    //edit icon
                    if (target.attr("data-type") == 'icon') {
                        jQuery("#tnpc-edit-icon").fadeIn(500);
                        jQuery("#tnpc-edit-icon .tnpc-edit-box").slideDown(500);
                        jQuery("#tnpc-edit-icon i").click(function () {
                            jQuery(this).parent().parent().parent().parent().fadeOut(500)
                            jQuery(this).parent().parent().parent().slideUp(500)
                            target.children('i').attr('class', jQuery(this).attr('class'));
                        });
                    }//

                });
            }, function () {
        jQuery(this).children(".tnpc-row-edit-hover").remove();
    }
    );
}

jQuery.fn.add_delete = function () {
    this.append('<div class="tnpc-row-delete"><i class="fa fa-times" ></i></div>');
    this.find('.tnpc-row-delete').perform_delete();
}

jQuery.fn.perform_delete = function () {
    this.click(function () {
        jQuery(this).parent().remove();
    });
}

jQuery.fn.add_block_edit = function () {
    this.append('<div class="tnpc-row-edit-block"><i class="fa fa-pencil" ></i></div>');
    this.find('.tnpc-row-edit-block i').perform_block_edit();
}

jQuery.fn.perform_block_edit = function () {

    jQuery(".tnpc-row-edit-block").click(function (e) {
        e.preventDefault()
    });

    this.click(function (e) {

        e.preventDefault();

        target = jQuery(this).parent().parent().find('.edit-block');

        jQuery("#tnpc-edit-block .bgcolor").val(target.css("background-color"));
        jQuery("#tnpc-edit-block .font").val(target.css("font-family"));

        jQuery('.bgcolor').wpColorPicker({
//                change: function (event, ui) {
//                    jQuery('.bgcolor').iris('hide');
//                },
        });
        jQuery('.bgcolor').wpColorPicker().iris('color', target.css("background-color"));

        // posts block
        if (jQuery(this).parent().parent().hasClass('tnpc-row-posts')) {

            jQuery("#tnpc-edit-posts").fadeIn(500);
            jQuery("#tnpc-edit-posts .tnpc-edit-box").slideDown(500);

        } else {

            jQuery("#tnpc-edit-block").fadeIn(500);
            jQuery("#tnpc-edit-block .tnpc-edit-box").slideDown(500);

        }

        jQuery("#tnpc-edit-block .tnpc-edit-box-buttons-save").click(function () {
            jQuery(this).parent().parent().parent().fadeOut(500)
            jQuery(this).parent().parent().slideUp(500)

            target.css("background-color", jQuery("#tnpc-edit-block .bgcolor").val());
            target.css("font-family", jQuery("#tnpc-edit-block .font").val());

        });

        jQuery("#tnpc-edit-posts .tnpc-edit-box-buttons-save").click(function () {

            jQuery(this).parent().parent().parent().fadeOut(500)
            jQuery(this).parent().parent().slideUp(500)
            var categories = [];
            jQuery('#tnpc-edit-posts input[name="options[theme_categories][]"]:checked').each(function ()
            {
                categories.push(jQuery(this).val());
            });
            var data = {
                'action': 'tnpc_render',
                'b': target.parent().parent().parent().data('block') + ".block",
                'num': jQuery("#tnpc-edit-posts .number").val(),
                'tags': jQuery("#tnpc-edit-posts .tags").val(),
                'categories': categories
            };
            jQuery.post(ajaxurl, data, function (response) {
                new_row = jQuery(response);
                target.parent().before(new_row).remove();
                new_row.add_delete();
                new_row.add_block_edit();
                new_row.find(".tnpc-row-edit").hover_edit();
            });
        });

    });

}

jQuery(function () {

    // collapse wp menu
    jQuery('body').addClass('folded');

//Drag & Drop
    jQuery("#newsletter-builder-area-center-frame-content").sortable({
        revert: false,
        stop: function (event, ui) {
            if (ui.item.hasClass("newsletter-sidebar-buttons-content-tab")) {
                loading_row = jQuery('<div style="text-align: center; padding: 20px; background-color: #d4d5d6; color: #52BE7F;"><i class="fa fa-cog fa-2x fa-spin" /></div>');
                ui.item.before(loading_row);
                ui.item.remove();
                var data = {
                    'action': 'tnpc_render',
                    'b': ui.item.data("file")
                };
                jQuery.post(ajaxurl, data, function (response) {
                    new_row = jQuery(response);
//                    ui.item.before(new_row);
//                    ui.item.remove();
                    loading_row.before(new_row);
                    loading_row.remove();
                    new_row.add_delete();
                    new_row.add_block_edit();
                    new_row.find(".tnpc-row-edit").hover_edit();
                });
            }
        }
    });

    jQuery(".tnpc-row").draggable({
        connectToSortable: "#newsletter-builder-area-center-frame-content",
        //helper: "clone",
        revert: false,
        handle: ".tnpc-row-move"
    });

    jQuery(".newsletter-sidebar-buttons-content-tab").draggable({
        connectToSortable: "#newsletter-builder-area-center-frame-content",
        helper: "clone",
        revert: false,
        start: function () {
            if (jQuery('.tnpc-row').length)
                jQuery('.tnpc-row').append('<div class="tnpc-drop-here">Drag&Drop blocks here!</div>');
            else
                jQuery('#newsletter-builder-area-center-frame-content').append('<div class="tnpc-drop-here">Drag&Drop blocks here!</div>');
        },
        stop: function () {
            jQuery('.tnpc-drop-here').remove();
        }
    });

//close edit
    jQuery(".tnpc-edit-box-buttons-cancel").click(function () {
        jQuery(this).parent().parent().parent().fadeOut(500)
        jQuery(this).parent().parent().slideUp(500)
    });

// initialize controls
    jQuery(".tnpc-row").add_delete();
    jQuery(".tnpc-row").add_block_edit();
    jQuery(".tnpc-row-edit").hover_edit();

});

function create() {

    jQuery("#newsletter-preloaded-export").html(jQuery("#newsletter-builder-area-center-frame-content").html());

    jQuery("#newsletter-preloaded-export .tnpc-row-delete").remove();
    jQuery("#newsletter-preloaded-export .tnpc-row-edit-block").remove();
    jQuery("#newsletter-preloaded-export .tnpc-row").removeClass("ui-draggable");
//    jQuery("#newsletter-preloaded-export .tnpc-row-edit").removeAttr("data-type");
//    jQuery("#newsletter-preloaded-export .tnpc-row-edit").removeClass("tnpc-row-edit");
    preload_export_html = jQuery("#newsletter-preloaded-export").html();

    if (preload_export_html.indexOf('<style type="text/css">') > -1) {
        export_content = preload_export_html;
        jQuery("#tnpc-edit-export .text").val(export_content);
        jQuery('#tnpc-form input[name="options[body]"]').attr('value', export_content);
        jQuery("#tnpc-form").submit();
    } else {
        jQuery.get(ajaxurl, {action: "tnpc_css"}, function (data) {
//        export_content = '<style>' + data + '</style><link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic" rel="stylesheet" type="text/css"><link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"><div id="tnpc-wrapper"><div id="tnpc-wrapper-newsletter">' + preload_export_html + '</div></div>';
            export_content = '<!DOCTYPE html><html><head><title>Newsletter</title><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><meta http-equiv="X-UA-Compatible" content="IE=edge" />';
            export_content += '<style type="text/css">' + data + '</style>';
            export_content += '<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic" rel="stylesheet" type="text/css">';
            export_content += '<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">';
            export_content += '</head><body style="margin: 0; padding: 0;">';
            export_content += preload_export_html;
            export_content += '</body></html>';
            jQuery("#tnpc-edit-export .text").val(export_content);
            jQuery('#tnpc-form input[name="options[body]"]').attr('value', export_content);
            jQuery("#tnpc-form").submit();
        });
    }

    jQuery("#newsletter-preloaded-export").html(' ');

}

