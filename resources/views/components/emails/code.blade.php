{{-- resources/views/components/emails/code.blade.php --}}
<table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin: 24px 0;">
    <tr>
        <td align="center">
            <table cellpadding="0" cellspacing="0" border="0" style="background-color: #f5f5f5; border-radius: 12px; border: 2px dashed #cccccc;">
                <tr>
                    <td style="padding: 24px 40px;">
                        <span style="font-size: 36px; font-weight: bold; letter-spacing: 10px; color: #1a1a1a; font-family: 'Courier New', Courier, monospace; display: inline-block;">
                            {{ $slot }}
                        </span>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>