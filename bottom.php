</td>
</tr>
<tr align="center">
    <td colspan="2">
        <center>© Inflorescence / Nuclearkitten network.</center>
    </td>
</tr>
</table>


<button id="chatToggle">Chat</button>

<div id="chatbox">
    <iframe src="talk.php" width="100%" height="100%" style="border:none;"></iframe>
</div>

<script>
const toggleBtn = document.getElementById('chatToggle');
const chatBox = document.getElementById('chatbox');

toggleBtn.addEventListener('click', () => {
    chatBox.classList.toggle('visible');
});
</script>

</body>
</html>
