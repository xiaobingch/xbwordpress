<!-- 素材-WordPress 的按钮样式-->
<input type="submit" name="test" value="普通按钮" />
<input type="submit" name="test" value="标准按钮" class="button" />
<input type="submit" name="test" value="主要按钮" class="button button-primary" />
<input type="submit" name="test" value="副按钮" class="button button-secondary" />
<input type="submit" name="test" value="大按钮" class="button button-large" />
<input type="submit" name="test" value="小按钮" class="button button-small" />
<input type="submit" name="test" value="超大按钮" class="button button-hero" /> -->

<!-- 素材-使用 WordPress 自带的表单样式 -->
<form method="POST" action="">
            <table class="form-table">
                <tr valign="top">
                    <th><label for="input-example">输入框</label></th>
                    <td><input id="input-example" name="input-example" /></td>
                </tr>
                <tr valign="top">
                    <th><label for="select-example">下拉框：</label></th>
                    <td>
                        <select name="select-example">
                        <option value="1">是</option>
                        <option value="0">否</option>
                        </select>
                    </td>
                </tr>
                <tr valign="top">
                    <th><label for="check-example">选择框</label></th>
                    <td><input type="checkbox" name="check-example" /></td>
                </tr>
                <tr valign="top">
                    <th><label for="radio-example">Radio </label></th>
                    <td>
                        <input type="radio" name="radio-example" value="是" /> 是
                        <input type="radio" name="radio-example" value="否" /> 否
                    </td>
                </tr>
                <tr valign="top">
                    <th><label for="textarea">文本框</label></th>
                    <td><textarea name="textarea"></textarea></td>
                </tr>
                <tr valign="top">
                    <td>
                        <input type="submit" name="save" value="保存" class="button-primary" />
                        <input type="submit" name="reset" value="重置" class="button-secondary" />
                    </td>
                </tr>
            </table>
        </form>

 <!-- 素材-WordPress 自带的表格样式 -->
 <table class="widefat striped">
            <thead>
                <tr>
                    <th>序号</th>
                    <th>达人课名称</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Angular 初学者快速上手教程</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>快速学习 Spring Boot 技术栈</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Webpack 达人的成长之路</td>
                </tr>
            </tbody>
        </table>