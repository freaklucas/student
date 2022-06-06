<?xml version="1.0" encoding="UTF-8"?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<body style="font-family:Arial;font-size:12pt;background-color:teal; display:flex; align-items:center;flex:center;margin-left: 42%; flex-direction:row;">
    <xsl:for-each select="data/register">
    <div style="background-color:teal;color:white;padding:4px;">
      <h1 style="display:flex; flex-direction:column;">Cadastro</h1>
    <input placeholder="Insira seu email" type="email" style="font-weight:bold; display:flex; flex-direction:col; margin-right:12px;"><xsl:value-of select="email"/>  </input>
    <br/>

    <input placeholder="insira sua senha" type="password" style="font-weight:bold; "><xsl:value-of select="password"/>  </input>

        <button type="submit" style="margin-top:20%; display:flex;display:flex; flex-direction:column;" >
            Registrar
        </button>
    </div>
</xsl:for-each>
</body>
</html>