<section>
    
    <h2>Táblázat</h2>
    
    <div class="wrapper">
        <table>
            <thead>
                <tr> 
                    <th>Azonosító</th>
                    <th>Cím</th>
                    <th>Gyártás</th>
                    <th>Hossz</th>
                    <th>Bemutató</th>
                    <th>Youtube</th>
                    <th>Műveletek</th>
                </tr>
            </thead>
            <tbody class="nevsor" id="filmlista">
                <tr>
                <td>2</td>
                <td>Afrikai vőlegény</td>
                <td>1944</td>
                <td>80</td>
                <td>1944-01-31</td>
                <td>1</td>
                <td></td>
                </tr>
                <tr>
                <td>3</td>
                <td>Akit elkap az ár</td>
                <td>1941</td>
                <td></td>
                <td>1942-01-15</td>
                <td>0</td>
                <td></td>
                </tr>
                <tr>
                <td>4</td>
                <td>Alkalom</td>
                <td>1942</td>
                <td>76</td>
                <td>1942-10-26</td>
                <td>1</td>
                <td></td>
                </tr>
                <tr>
                <td>5</td>
                <td>András</td>
                <td>1941</td>
                <td></td>
                <td>1941-04-29</td>
                <td>0</td>
                <td></td>
                </tr>
                <tr>
                <td>6</td>
                <td>Annamária</td>
                <td>1942</td>
                <td>84</td>
                <td>1943-02-01</td>
                <td>0</td>
                <td></td>
                </tr>
                </tbody>
            </table>
</div>
<div>
    <fieldset>   
        <form id="filmform">
            <input type="hidden" id="id">
            
            <div class="form-group">
                <label for="cim">Cím:</label>
                <input type="text" name="cim" id="cim" required>
            </div>
            
            <div class="form-group">
                <label for="gyartas">Gyártás:</label>
                <input type="text" name="gyartas" id="gyartas" required>
            </div>
            
            <div class="form-group">
                <label for="hossz">Hossz:</label>
                <input type="text" name="hossz" id="hossz" required>
            </div>
            
            <div class="form-group">
                <label for="bemutato">Bemutató:</label>
                <input type="text" name="bemutato" id="bemutato" required>
            </div>
            
            <div class="form-group">
                <label for="youtube">Youtube:</label>
                <input type="text" name="youtube" id="youtube" required>
            </div>
            
            <div>
                <button type="submit">Hozzáad</button>
            </div>
        </form>
</fieldset>
    </div>
</section>
        <script src="./logicals/fetchapi.js"></script>
