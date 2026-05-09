<aside>
            <h1>Táblázat</h1>
        </aside>
        <div>
            <table id="">
                <thead>
                <tr> 
                    <th>Azonosító</th>
                    <th>Cím</th>
                    <th>Gyártás</th>
                    <th>Hossz</th>
                    <th>Bemuató</th>
                    <th>Youtube</th>
                    <th>Műveltek</th>
                </tr>
                </thead>
                <tbody class="nevsor" id="filmlista">
                </tbody>
            </table>
            <div>
                <form onsubmit="event.preventDefault();onFormSubmit();" id="filmform">
                        <input type="hidden" id="id">
                        <label>Cím:</label>
                        <input type="text" name="cim" id="cim">
                        <label>Gyártás:</label>
                        <input type="text" name="gyartas" id="gyartas">
                        <label>Hossz:</label>
                        <input type="text" name="hossz" id="hossz">
                        <label>Bemuató:</label>
                        <input type="text" name="bemutato" id="bemutato">
                        <label>Youtube:</label>
                        <input type="text" name="youtube" id="youtube">
                    </div>
                    <div>
                        <input type="submit" value="Hozzáad">
                    </div>
                </form>
            </div>
        </div>
        <script src="./logicals/fetchapi.js"></script>
