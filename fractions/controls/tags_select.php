<h4>תגים</h4>

<div id="tags">
    <?php if (array_key_exists('selected', $data) == false || is_array($data['selected']) == false || count($data['selected']) == 0) { ?>
    <div class="tag_row" data-index='0'>
        <input type="text" name="{{name}}[]" list="tag_list"/> 
    </div>
    <?php } else { ?>
        <?php $i = 0; ?>
        <?php foreach ($data['selected'] as $tag) { ?>
        <div class="tag_row" data-index='<?= $i++ ?>'>
            <input type="text" name="{{name}}[]" list="tag_list" value="<?= $tag['name'] ?>"/> 
        </div>
        <?php } ?>
    <?php } ?>
</div>

<datalist id="tag_list">
    <?php foreach (get_tags() as $tag) { ?>
    <option value="<?= $tag['name'] ?>"><?= $tag['name'] ?></option>
    <?php } ?>
</datalist>

<a class="waves-effect waves-light btn" id="tags_add">הוסף תג</a> 
<a class="waves-effect waves-light red btn" id="tags_remove">הסר תג</a>

<script>
    $('#tags_add').on('click', function() {
        var row = $('.tag_row:last').clone();
        var index = row.attr('data-index');
        var input = row.children('input:first');
        
        row.attr('data-index', ++index);
        input.val('');
        row.appendTo("#tags");
    });
    
    $('#tags_remove').on('click', function() {
        if ($('.tag_row').length > 1) {
            var row = $('.tag_row:last').remove();
        }
    });
</script>