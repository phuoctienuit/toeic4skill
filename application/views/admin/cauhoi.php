Question <?php echo $i; ?>:
        <div class="cauhoi">
            <div>
                <label class="" for="">Option A</label> 
                <input name="optiona<?php echo $i; ?>" class="class" value="" type="text">
            </div>
            <div>
                <label class="" for="">Option B</label> 
                <input name="optionb<?php echo $i; ?>" class="class" value="" type="text">
            </div>
            <div>
                <label class="" for="">Option C</label> 
                <input name="optionc<?php echo $i; ?>" class="class" value="" type="text">
            </div>
            <div>
                <label class="" for="">Option D</label> 
                <input name="optiond<?php echo $i; ?>" class="class" value="" type="text">
            </div>
            <label class="" for="">Key</label>  
            <select name="key<?php echo $i; ?>" id="dapan">
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="c">C</option>
                <option value="d">D</option>
            </select>
            <div class="file_lable">
                <div>
                    <label for="file">Image:</label>
                    <input type="file" name="image<?php echo $i; ?>" id="file" />
                </div>
                <div>
                    <label for="file">Audio:</label>
                    <input type="file" name="audio<?php echo $i; ?>" id="file" />
                </div>
            </div>
        </div>