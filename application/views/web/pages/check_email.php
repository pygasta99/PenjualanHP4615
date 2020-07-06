

<div class="main">
    <div class="content" style="text-align: center">
        <div class="register_account" style="text-align:center;display:inline-block;float: none">
            <h3>Buat Akun Baru</h3>
            <form>
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <div>
                                    <input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Name';
                                            }" >
                                </div>

                                <div>
                                    <input type="text" value="City" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'City';
                                            }">
                                </div>

                                <div>
                                    <input type="text" value="Zip-Code" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Zip-Code';
                                            }">
                                </div>
                                <div>
                                    <input type="text" value="E-Mail" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'E-Mail';
                                            }">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input type="text" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Address';
                                            }">
                                </div>
                                <div>
                                    <select id="country" name="country" onchange="change_country(this.value)" class="frm-field required">
                                        <option value="null">Select a Country</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>                                       
                                        <option value="BD">Indonesia</option>
                                        <option value="BD">Malaysa</option>
                                        <option value="BD">Jepan</option>
                                        <option value="BD">Russia</option>
                                        <option value="BD">Inggris</option>
                                        <option value="BD">Amerika Serikat</option>

                                    </select>
                                </div>		        

                                <div>
                                    <input type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Phone';
                                            }">
                                </div>

                                <div>
                                    <input type="text" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Password';
                                            }">
                                </div>
                            </td>
                        </tr> 
                    </tbody></table> 
                <div class="search"><div><button class="grey">Buat Akun</button></div></div>
                <p class="terms">Click 'Buat Akun' jika kamu setuju. <a href="#">Terms &amp; Conditions</a>.</p>
                <div class="clear"></div>
            </form>
        </div>  	
        <div class="clear"></div>
    </div>
</div>