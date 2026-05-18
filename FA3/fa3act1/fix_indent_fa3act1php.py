from pathlib import Path

path = Path(r'c:\xampp\htdocs\YrreAppDev\FA3\fa3act1\fa3act1php.php')
text = path.read_text(encoding='utf-8').replace('\r\n', '\n')
lines = text.split('\n')
out_lines = []
in_php = False
html_indent = 0
nest = 0

for line in lines:
    stripped = line.strip()

    if not in_php:
        if stripped == '<?php':
            out_lines.append('<?php')
            in_php = True
            nest = 0
            continue
        if stripped == '':
            if out_lines and out_lines[-1] == '':
                continue
            out_lines.append('')
            continue
        if stripped.startswith('</'):
            html_indent = max(0, html_indent - 1)
            out_lines.append('    ' * html_indent + stripped)
            continue
        out_lines.append('    ' * html_indent + stripped)
        if stripped.startswith('<') and not stripped.startswith('</'):
            if stripped.startswith('<img') or stripped.startswith('<link') or stripped.startswith('<meta') or stripped.startswith('<!'):
                continue
            if '</' in stripped and stripped.endswith('>'):
                continue
            if stripped.endswith('/>'):
                continue
            tag = stripped[1:].split()[0].split('>')[0]
            if tag in {'html', 'head', 'body', 'div', 'table', 'tbody', 'tr', 'td', 'th'}:
                if not ('</' in stripped and stripped.endswith('>')):
                    html_indent += 1
        continue

    # PHP section
    if stripped == '?>':
        if out_lines and out_lines[-1] == '':
            out_lines.pop()
        out_lines.append('?>')
        in_php = False
        html_indent = 0
        continue

    if stripped == '':
        if out_lines and out_lines[-1] == '':
            continue
        out_lines.append('')
        continue

    if stripped == '$students = array(':
        out_lines.append('$students = array(')
        nest = 1
        continue

    if stripped == 'array(':
        out_lines.append('    ' * nest + 'array(')
        nest += 1
        continue

    if stripped in {')', '),'}:
        nest = max(0, nest - 1)
        out_lines.append('    ' * nest + stripped)
        continue

    if stripped == ');':
        out_lines.append(');')
        continue

    if '=>' in stripped:
        out_lines.append('    ' * nest + stripped)
        continue

    if stripped.startswith('usort('):
        out_lines.append('')
        out_lines.append('usort($students, function($a, $b) {')
        continue

    if stripped.startswith('return '):
        out_lines.append('    ' + stripped)
        continue

    if stripped == '});':
        out_lines.append('});')
        continue

    out_lines.append(stripped)

path.write_text('\n'.join(out_lines) + '\n', encoding='utf-8')
print('Formatted file successfully.')
