<div class="sttcauhoi">Question <?php if(isset($question->cau)) echo $question->cau; else echo $i; ?>:</div>

        <div class="cauhoi">
            <div>
                <label class="" for="">Option A</label> 
                <input name="optiona<?php if(isset($question->cau)) echo $question->cau; else echo $i; ?>" class="class" value="<?php if(isset($question->optiona)) echo $question->optiona; ?>" type="text">
            </div>
            <div>
                <label class="" for="">Option B</label> 
                <input name="optionb<?php if(isset($question->cau)) echo $question->cau; else echo $i; ?>" class="class" value="<?php if(isset($question->optionb)) echo $question->optionb; ?>" type="text">
            </div>
            <div>
                <label class="" for="">Option C</label> 
                <input name="optionc<?php if(isset($question->cau)) echo $question->cau; else echo $i; ?>" class="class" value="<?php if(isset($question->optionc)) echo $question->optionc; ?>" type="text">
            </div>
            <div>
                <label class="" for="">Option D</label> 
                <input name="optiond<?php if(isset($question->cau)) echo $question->cau; else echo $i; ?>" class="class" value="<?php if(isset($question->optiond)) echo $question->optiond; ?>" type="text">
            </div>
            <label class="" for="">Key</label>  
            <select name="key<?php if(isset($question->cau)) echo $question->cau; else echo $i; ?>" id="dapan">
                <option value="a" <?php if(isset($question->key)&&$question->key=='a') echo "selected"; ?> >A</option>
                <option value="b" <?php if(isset($question->key)&&$question->key=='b') echo "selected"; ?> >B</option>
                <option value="c" <?php if(isset($question->key)&&$question->key=='c') echo "selected"; ?> >C</option>
                <option value="d" <?php if(isset($question->key)&&$question->key=='d') echo "selected"; ?> >D</option>
            </select>
            <div class="file_lable">
                <div>
                    <label for="file">Image:</label>
                    <input type="file" name="image<?php if(isset($question->cau)) echo $question->cau; else echo $i; ?>" id="file" />
                </div>
                <div>
                    <label for="file">Audio:</label>
                    <input type="file" name="audio<?php if(isset($question->cau)) echo $question->cau; else echo $i; ?>" id="file" />
                </div>
            </div>
        </div>