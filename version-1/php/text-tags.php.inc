<?php

libxml_disable_entity_loader(false);

function textTags() {
    return array("link", "location", "logo","name",
        "date", "role",
        "mention", "school", "text", "title");
}
?>